#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (

    mb_promotion_tiles int(11) unsigned DEFAULT '0' NOT NULL,
		mb_company_tiles int(11) unsigned DEFAULT '0' NOT NULL,
		mb_accordian_teaser int(11) unsigned DEFAULT '0' NOT NULL,
		mb_overview_tile_tags  int(11) unsigned DEFAULT '0' NOT NULL,
		bg_color varchar(255) DEFAULT '' NOT NULL,
		teaser_link_text varchar(255) DEFAULT '' NOT NULL,
		mb_teasers_elements int(11) DEFAULT '0' NOT NULL,
		is_feature int(1) unsigned NOT NULL default '0',

);

#
# Table structure for table 'tx_mbteasers_domain_model_tile'
#
CREATE TABLE tx_mbteasers_domain_model_tile (

		headline varchar(255) DEFAULT '' NOT NULL,
		subheadline varchar(255) DEFAULT '' NOT NULL,
		more_info_link_text varchar(255) DEFAULT '' NOT NULL,
		more_info_link varchar(255) DEFAULT '' NOT NULL,
		tile_image int(11) unsigned NOT NULL default '0',
		is_feature int(1) unsigned NOT NULL default '0',
		bg_color varchar(255) DEFAULT '' NOT NULL,
		text_color varchar(255) DEFAULT '' NOT NULL,
		tt_content_uid int(11) unsigned DEFAULT '0' NOT NULL,
		sorting_tile int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_mbteasers_domain_model_element'
#
CREATE TABLE tx_mbteasers_domain_model_element (

		headline varchar(255) DEFAULT '' NOT NULL,
		tt_content_element int(11) DEFAULT '0' NOT NULL,
		tt_content_uid int(11) unsigned DEFAULT '0' NOT NULL,
		sorting_tile int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_mbteasers_domain_model_companytile'
#
CREATE TABLE tx_mbteasers_domain_model_companytile (

		headline varchar(255) DEFAULT '' NOT NULL,
		subheadline varchar(255) DEFAULT '' NOT NULL,
		more_info_link_text varchar(255) DEFAULT '' NOT NULL,
		more_info_link varchar(255) DEFAULT '' NOT NULL,
		type int(1) unsigned NOT NULL default '0',
		bg_color varchar(255) DEFAULT '' NOT NULL,
		text_color varchar(255) DEFAULT '' NOT NULL,
		tt_content_uid int(11) unsigned DEFAULT '0' NOT NULL,
		sorting_tile int(11) unsigned DEFAULT '0' NOT NULL,
		tile_picture int(11) unsigned NOT NULL default '0',


);

#
# Table structure for table 'tx_mbteasers_domain_model_accordianteaser'
#
CREATE TABLE tx_mbteasers_domain_model_accordianteaser (

		title varchar(255) DEFAULT '' NOT NULL,
		description text NOT NULL,
		tt_content_uid int(11) unsigned DEFAULT '0' NOT NULL,
		sorting_tile int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_mbteasers_domain_model_overviewtileswithfilter'
#
CREATE TABLE tx_mbteasers_domain_model_overviewtileswithfilter (

		headline varchar(255) DEFAULT '' NOT NULL,
		headline_color varchar(255) DEFAULT '' NOT NULL,
		subheadline varchar(255) DEFAULT '' NOT NULL,
		subheadline_color varchar(255) DEFAULT '' NOT NULL,
		paragraph_text text NOT NULL,
		tile_picture int(11) unsigned NOT NULL default '0',
		more_info_link_text varchar(255) DEFAULT '' NOT NULL,
		more_info_link varchar(255) DEFAULT '' NOT NULL,
		type int(1) unsigned NOT NULL default '0',
		bg_color varchar(255) DEFAULT '' NOT NULL,
		text_color varchar(255) DEFAULT '' NOT NULL,
		tt_content_uid int(11) unsigned DEFAULT '0' NOT NULL,
		sorting_tile int(11) unsigned DEFAULT '0' NOT NULL,
		tile_tags varchar(255) DEFAULT '' NOT NULL,
		tile_modal_content text NOT NULL,

);

CREATE TABLE tx_mbteasers_domain_model_overviewtitletags (

		title varchar(255) DEFAULT '' NOT NULL,
		tt_content_uid int(11) unsigned DEFAULT '0' NOT NULL,
		sorting_tile int(11) unsigned DEFAULT '0' NOT NULL,
		mb_overview_tiles_with_filter int(11) unsigned DEFAULT '0' NOT NULL,

);

