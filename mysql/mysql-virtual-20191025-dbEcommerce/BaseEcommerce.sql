CREATE schema ecommerce11ARMO;
USE ecommerce11ARMO;

CREATE TABLE usuarios(
	-- nombre_del_campo tipo_de_dato constraints
	id int UNSIGNED PRIMARY KEY NOT NULL, 
    email varchar(100) UNIQUE NOT NULL,
    password varchar(300) NOT NULL,
    username varchar(100)
);

 -- Crear tabla de categorías.
 CREATE TABLE categorias(
 	-- nombre_del_campo tipo_de_dato constraints
	id int UNSIGNED PRIMARY KEY NOT NULL,
    nombre varchar(100) NOT NULL,
    descripcion text
 );


CREATE TABLE productos(
	-- nombre_del_campo tipo_de_dato constraints
	id int UNSIGNED PRIMARY KEY NOT NULL,
    nombre varchar(150) NOT NULL,
    desc_corta varchar(200) NOT NULL,
    desc_larga text,
    stock smallint,
    precio decimal(8,2) UNSIGNED NOT NULL,
    usuario_id int UNSIGNED NOT NULL,
    categoria_id int UNSIGNED NOT NULL,    
    
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    -- La clave foránea a categorías no debe existir si planteamos una relación
    -- de muchos a muchos con los productos (un pdto pertenece a varias categorías).
    FOREIGN KEY (categoria_id) REFERENCES categorias(id)
);


CREATE TABLE carritos(
	-- nombre_del_campo tipo_de_dato constraints
	id int UNSIGNED PRIMARY KEY NOT NULL,
    alta datetime NOT NULL,
    usuario_id int UNSIGNED NOT NULL,
    producto_id int UNSIGNED NOT NULL,
    nombre varchar(150) NOT NULL,
	desc_corta varchar(200) NOT NULL,
    precio decimal(8,2) NOT NULL,
    cantidad smallint UNSIGNED NOT NULL,
    orden_compra int NOT NULL,
    estado tinyint NOT NULL DEFAULT 0,
    
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (producto_id) REFERENCES productos(id)
    
); 
    
-- Alernativa de un producto con muchas categorías.
-- Necesitamos esta tabla intermedia:
    
CREATE TABLE producto_categoria(
	-- nombre_del_campo tipo_de_dato constraints
	id int UNSIGNED PRIMARY KEY NOT NULL,
	producto_id int UNSIGNED NOT NULL,
    categoria_id int UNSIGNED NOT NULL,
    
    FOREIGN KEY (producto_id) REFERENCES productos(id),
    FOREIGN KEY (categoria_id) REFERENCES categorias(id)
    
); 

-- //