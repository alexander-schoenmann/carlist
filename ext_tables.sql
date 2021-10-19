CREATE TABLE tx_cars_domain_model_country (
	title varchar(255) DEFAULT '' NOT NULL,
	flag int(11) unsigned NOT NULL default '0'
);

CREATE TABLE tx_cars_domain_model_brand (
	title varchar(255) DEFAULT '' NOT NULL,
	description varchar(255) DEFAULT '' NOT NULL,
	logo int(11) unsigned NOT NULL default '0',
	country int(11) unsigned DEFAULT '0'
);

CREATE TABLE tx_cars_domain_model_owner (
	name varchar(255) DEFAULT '' NOT NULL,
	e_mail varchar(255) DEFAULT '' NOT NULL,
	phone_number varchar(255) DEFAULT '' NOT NULL,
	address varchar(255) DEFAULT '' NOT NULL
);

CREATE TABLE tx_cars_domain_model_car (
	model varchar(255) DEFAULT '' NOT NULL,
	variant varchar(255) DEFAULT '' NOT NULL,
	type varchar(255) DEFAULT '' NOT NULL,
	construction_year int(11) DEFAULT '0' NOT NULL,
	horsepower int(11) DEFAULT '0' NOT NULL,
	fuel varchar(255) DEFAULT '' NOT NULL,
	kilometre int(11) DEFAULT '0' NOT NULL,
	price varchar(255) DEFAULT '' NOT NULL,
	description text,
	propulsion varchar(255) DEFAULT '' NOT NULL,
	transmission varchar(255) DEFAULT '' NOT NULL,
	teaser_image int(11) unsigned NOT NULL default '0',
	gallery int(11) unsigned DEFAULT '0' NOT NULL,
	brand int(11) unsigned DEFAULT '0',
	owner int(11) unsigned DEFAULT '0'
);
