create table customer (
    user_nid VARCHAR(50) PRIMARY KEY,
	name VARCHAR(50) NOT NULL,
	address VARCHAR(50) NOT NULL,
	phn_num VARCHAR(50) NOT NULL,
	lisence_num VARCHAR(50) NOT NULL,
	mail VARCHAR(50)
);
create table gun(
    gun_id VARCHAR(50)  PRIMARY KEY,
    user_nid VARCHAR(50) NOT NULL,
    gun_catagory VARCHAR(50) NOT NULL,
    brand_name VARCHAR(50) NOT NULL,
    gun_price VARCHAR(50) NOT NULL
);

create table cart_item(
	cart_item_id VARCHAR(50) PRIMARY KEY,
	quantity VARCHAR(50) NOT NULL,
	gun_id VARCHAR(50) NOT NULL,
	user_nid VARCHAR(50) NOT NULL,
	cost integer,
	FOREIGN KEY (gun_id) REFERENCES gun(gun_id) on delete cascade ,
	FOREIGN KEY(user_nid) REFERENCES customer(user_nid) on delete cascade 
);

 create table payment(
 	cart_item_id VARCHAR(50) NOT NULL,
	FOREIGN KEY (cart_item_id) REFERENCES cart_item(cart_item_id) on delete cascade 
 );

 
