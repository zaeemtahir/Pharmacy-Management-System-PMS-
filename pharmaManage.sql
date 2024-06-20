use pharmaManage

create table signin(
userName varchar(100) Primary key,
password varchar(100),
staff_id varchar(10) foreign key references staff(staff_ID)
)

Insert into signin(userName ,password, staff_id)
Values('zaeem03@gmail.com' , 'zaeem123' , 'S001')

select * from signin

create table vendor(
	vendor_ID varchar(10) primary key,
	vendor_name varchar(50),
	vendor_Address varchar(100),
	phone int
)

insert into vendor(vendor_ID, vendor_name, vendor_Address, phone)
values('V001', 'Getz', 'Lahore', 0325455782)

create table medicine(
	medName varchar(50) primary key,
	genericName varchar(100),
	priceperTablet money,
	packing int,
	NumberOfLeaves int,
	totalStock int,
	vendor_ID varchar(10) foreign key references vendor(vendor_ID) 
)
select *from medicine

create table staff(
	staff_ID varchar(10) primary key,
	salary money,
	staff_name varchar(100),
	staff_role varchar(50)
)

create table invoice(
	invoiceNumber varchar(30) primary key,
	medName varchar(50) foreign key references medicine(medName),
	quantity int,
	priceperTablet money,
	total_amount money,
	paid_Amount money,
	change money,
	staff_ID varchar(10) foreign key references staff(staff_ID)
)

select * from invoice

insert into invoice(invoiceNumber , medName , quantity , priceperTablet , total_amount , paid_Amount , change , staff_ID)
values ('34323' , 'Panadol' , 24 , '4' , '96' , '100' , '4' , 'S001')


select * from staff

insert into staff(staff_ID , salary , staff_name, staff_role)
values('S001' , 10000 , 'Zaeem' , 'Pharmacist')

