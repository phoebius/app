--
-- Phoebius Framework v.1.0.0
-- Generated at 05.12.09 16:31 for PgSql
--

CREATE SEQUENCE "content_page_id_sq";

CREATE TABLE "content_page"(
	"id" int4 NOT NULL DEFAULT nextval ( 'content_page_id_sq' ),
	"title" character varying NOT NULL,
	"text" character varying NOT NULL,
	PRIMARY KEY ("id")
);

ALTER SEQUENCE "content_page_id_sq" OWNED BY "content_page"."id";