CREATE TABLE flarepoint.cdp_collection (
	id BIGINT NOT NULL,
	name varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	description varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '' NOT NULL,
	profile_reach BIGINT UNSIGNED DEFAULT 0 NOT NULL,
	counted_view BIGINT UNSIGNED DEFAULT 0 NOT NULL,
	logged_event BIGINT UNSIGNED DEFAULT 0 NOT NULL,
	media_touchpoint BIGINT UNSIGNED NOT NULL,
	sample_size BIGINT UNSIGNED DEFAULT 0 NOT NULL,
	CONSTRAINT cdp_collection_PK PRIMARY KEY (id)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8
COLLATE=utf8_general_ci;
CREATE FULLTEXT INDEX cdp_collection_name_IDX ON flarepoint.cdp_collection (name);

CREATE TABLE flarepoint.cdp_pixeltag (
	id BIGINT NOT NULL,
	name varchar(100) NOT NULL,
	timezone varchar(100) NULL,
	website_domains json NULL,
	filtering_rules json NULL,
	collection_id BIGINT NOT NULL,
	CONSTRAINT cdp_pixeltag_PK PRIMARY KEY (id),
	CONSTRAINT cdp_pixeltag_FK FOREIGN KEY (id) REFERENCES flarepoint.cdp_collection(id)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8
COLLATE=utf8_general_ci;
CREATE INDEX cdp_pixeltag_name_IDX USING HASH ON flarepoint.cdp_pixeltag (name);
