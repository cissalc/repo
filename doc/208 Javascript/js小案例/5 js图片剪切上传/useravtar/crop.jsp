<%@ page import="java.util.*"%>
<%@ page import="java.io.*"%>
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
%>
<%
	String storeDir = request.getSession().getServletContext().getRealPath("/") + "upload" + File.separator;
	int width = Integer.parseInt(request.getParameter("width"));
	int height = Integer.parseInt(request.getParameter("height"));
	int top = Integer.parseInt(request.getParameter("top"));
	int left = Integer.parseInt(request.getParameter("left"));
	float rate = Float.parseFloat(request.getParameter("rate"));
	String picName = request.getParameter("picName");
	
	String resultPicName = randStr(6) + "." + getExtName(picName);
	
	String cmd = "C:\\Tools\\ImageMagick-6.5.4-Q16\\convert ";
	
	if (rate < 1) {
		cmd += "-geometry " + (int)width * rate + "x" + (int)height * rate + "! ";
	}
	
	cmd += " -quality 100 -crop 120x120!";
	
	if (left >=0) {
		cmd +="+" + left;
	} else {
		cmd += left;
	}
	
	if (top >=0) {
		cmd +="+" + top;
	} else {
		cmd += top;
	}
	
	cmd += " +profile \"*\" ";
	cmd += storeDir + picName + " " + storeDir + resultPicName;
	
	Process process = Runtime.getRuntime().exec(cmd);
	
    InputStream fis = process.getInputStream();
    BufferedReader br = new BufferedReader(new InputStreamReader(fis)); 
    
    String line = null;
    while ((line = br.readLine()) != null) {
		System.out.println(line);
    }
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>效果</title>
</head>

<div style="width:500px; margin:200px auto 0;">
	<img src="./upload/<%=resultPicName%>" />
</div>
<body>
</body>
</html>