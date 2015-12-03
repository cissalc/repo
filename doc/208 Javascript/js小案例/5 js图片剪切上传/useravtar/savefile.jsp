
<%@ page language="java" contentType="text/html;charset=utf-8"%>
<%@ page import="java.util.*"%>
<%@ page import="org.apache.commons.fileupload.*"%>
<%@ page import="org.apache.commons.fileupload.FileUploadBase.*"%>
<%@ page import="org.apache.commons.fileupload.servlet.*"%>
<%@ page import="org.apache.commons.fileupload.disk.*"%>
<%@ page import="org.apache.commons.fileupload.util.*"%>
<%@ page import="java.io.*"%>
<%@ page import="java.io.*"%>
<html>
<head>
<title>保存上传文件</title>
</head>
<body>
<%!
	public String randStr(int n) {
		char[] ca = new char[]{'0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'};
		char[] cr = new char[n];
		Random random = new Random(System.currentTimeMillis());
		for (int i=0;i<n;i++) {
			int x = random.nextInt(36);
			cr[i] = ca[x];
		}
		return (new String(cr));
	}

	public String getExtName(String fileName) {
		int index = fileName.lastIndexOf(".");
		
		if (index == 0) {
			return "";
		}
		
		return fileName.substring(index + 1);
	}

	public void parseSize(String in) {
		try {
			width = Integer.parseInt(in.substring(0, in.indexOf('x')));
			height = Integer.parseInt(in.substring(in.indexOf('x') + 1));
		} catch (Exception e) {
			width = 0;
			height = 0;
		}
		
	}
	
	String storeName = "";
	int width = 0;
	int height = 0;
%>
<% 
if(ServletFileUpload.isMultipartContent(request)) {
		String storeDir = request.getSession().getServletContext().getRealPath("/") + File.separator + "upload" + File.separator;
		request.setCharacterEncoding("utf-8");  
	    DiskFileItemFactory factory = new DiskFileItemFactory();  
	    /** 
	     * 临时文件存储路径要真实存在 
	     */  
	    factory.setRepository(new File(storeDir));  
	    //内存最大占用  
	    factory.setSizeThreshold(1024000);  
	    ServletFileUpload sfu = new ServletFileUpload(factory);  
	    //单个文件最大值byte  
	    sfu.setFileSizeMax(1024 * 1024 * 10);  
	    //所有上传文件的总和最大值byte  
	    sfu.setSizeMax(1024 * 1024 * 10);  
	    List items = null;  
	    try {  
	        items = sfu.parseRequest(request);  
	    } catch (SizeLimitExceededException e) {  
	        System.out.println("size limit exception!");  
	    } catch(Exception e) {  
	        e.printStackTrace();  
	    }  
	      
	    Iterator iter = items==null?null:items.iterator();  
	    while(iter != null && iter.hasNext()) {  
	        FileItem item = (FileItem)iter.next();  
	        //简单的表单域  
	        if(!item.isFormField()) {  
	            System.out.println("client name:" + item.getName());
	            int index = item.getName().lastIndexOf("\\");
	            
	            String fileName = item.getName().substring(item.getName().lastIndexOf("\\") + 1);  
	            BufferedInputStream in1 = new BufferedInputStream(item.getInputStream());  
	            //文件存储在工程的upload目录下,这个目录也得存在
	            storeName = randStr(8) + "." + getExtName(fileName);
	            BufferedOutputStream out1 = new BufferedOutputStream(new FileOutputStream(new File(storeDir + storeName)));
	            
	            Streams.copy(in1, out1, true);  
	        }
	        String cmd = "identify -format %wx%h " + storeDir + storeName;
	        Process process = Runtime.getRuntime().exec(cmd);
	        InputStream fis = process.getInputStream();
            BufferedReader br = new BufferedReader(new InputStreamReader(fis)); 
            /*
            String line = null;
            while ((line = br.readLine()) != null) {
        	}
            */
            parseSize(br.readLine());
	    }  
	} else {  
	    System.out.println("enctype error!");  
	}
%>
<%=width%>
<%=storeName%>
<%=height%>
<script>
<%
	if (width > 0 && height > 0 && null != storeName && storeName.trim().length() > 0) {
%>
	parent.changePic('<%=storeName%>', <%=width%>, <%=height%>);
<%		
	} else {
%>
alert("文件上传失败，请重新上传！")
<%		
	}
%>
</script>
</body>
</html>