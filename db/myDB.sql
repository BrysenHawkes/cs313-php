
CREATE TABLE shopping_list (
	id			 int,
	recipe_id_monday	 int,
	recipe_id_tuesday	 int,
	recipe_id_wednesday	 int,
	recipe_id_thursday	 int,
	recipe_id_friday	 int,
	recipe_id_saturday	 int,
	recipe_id_sunday	 int
);

CREATE TABLE recipe (
	id			 int,
	name			 varchar(80),
	ingredient_id		 int[],
	amount			 real[],
	direction		 varchar(300)
);

CREATE TABLE ingredient (
	id			 int,
	name			 varchar(80),
	price			 real
);