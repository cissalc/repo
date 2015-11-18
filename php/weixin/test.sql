select id,name,orderNum from p_menu order by orderNum;

select pi.id,pi.name,pi.orderNum,pi.price,pi.sales,pi.picAddress,pi.menuId 
from p_item pi,p_menu pm
where pi.menuId = pm.id
order by pm.orderNum,pi.orderNum
;

select * from p_item;
