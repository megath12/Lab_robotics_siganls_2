
CREATE TABLE art22( 
    user_id int(11) AUTO_INCREMENT PRIMARY KEY not null, 
    tit varchar(300) not null, 
    revi varchar(100) not null, 
    auth varchar(600) not null, 
    doi varchar(256) not null 
);




INSERT INTO art17(tit, revi, auth, doi) VALUE ('Output feedback control of a skid-steered mobile robot based on the super-twisting algorithm', 'Control Engineering Practice', 'I. Salgado, D. Cruz-Ortiz, O. Camacho, I. Chairez','https://doi.org/10.1016/j.conengprac.2016.10.003'); 


INSERT INTO art21(tit, revi, auth, doi) VALUE ('Brain Computer Interface for Speech Synthesis Based on Multilayer Differential Neural Networks', 'Cybernetics and Systems', 'Dusthon Llorentea, Mariana Ballesteros, David Cruz-Ortiz, Ivan Salgado, Isaac Chairez','https://doi.org/10.1080/01969722.2021.2008685'); 


INSERT INTO art22(tit, revi, auth, doi) VALUE ('Active neck orthosis for musculoskeletal cervical disorders rehabilitation using a parallel mini-robotic device', ' Control Engineering Practice', 'Alejandro Lozano, Mariana Ballesteros, David Cruz-Ortiz, Isaac Chairez','https://doi.org/10.1016/j.conengprac.2022.105312'); 

INSERT INTO art22(tit, revi, auth, doi) VALUE ('', '', '', '',''); 

INSERT INTO art22(tit, revi, auth, doi) VALUE ('Output feedback robust control for teleoperated manipulator robots with different workspace', 'Expert Systems with Applications', 'Misael Sanchez, David Cruz-Ortiz, Mariana Ballesteros, Ivan Salgado, Isaac Chairez','https://doi.org/10.1016/j.eswa.2022.117838'); 

INSERT INTO art22(tit, revi, auth, doi) VALUE ('Asymmetric Constrained Control of a Cervical Orthotic Device Based on Barrier Sliding Modes', 'Applied Sciences', 'Caridad Mireles, Alejandro Lozano, Mariana Ballesteros, David Cruz-Ortiz, Ivan Salgado','https://doi.org/10.1016/j.conengprac.2022.105312'); 


INSERT INTO art23(tit, revi, auth, doi) VALUE ('Forearm sEMG data from young healthy humans during the execution of hand movements', 'Scientific Data', 'Manuela Gomez-Correa, Mariana Ballesteros, Ivan Salgado, David Cruz-Ortiz','https://doi.org/10.1038/s41597-023-02223-x'); 


DROP TABLE useres;

CREATE TABLE proyectos (
    uid int(10)  AUTO_INCREMENT PRIMARY KEY not null,
    nombre VARCHAR(256) not null,
    descripcion VARCHAR(900) NOT NULL,
    ima LONGBLOB not null
);


INSERT INTO proyectos(nom,descrip,ima) VALUES ('Evasión de obstaculos de un robot móvil basado en funciones controladas de Lyapunov tipo barrera','Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ea eveniet alias similique a, sapiente blanditiis laborum commodi tempore ipsam officiis vel ratione minima nobis hic ipsa, suscipit, dolorem harum.',LOAD_FILE('C:\Users\megat\Music\upibi\SS\Evidencias\Lab_se_ro\assets\images\proyectos\avoid-robot.pnh'));


CREATE TABLE investigadores (
	uid int(10) AUTO_INCREMENT PRIMARY KEY not null,
    nombre varchar(70) not null,
    grado varchar(300) not null,
    line1 varchar (70) not null,
    line2 varchar (70) not null,
    line3 varchar (70) not null,
	imagen LONGBLOB not null 
);

CREATE TABLE estudiantes(
	uid int(10) AUTO_INCREMENT PRIMARY KEY not null,
    nombre varchar(70) not null,
    grado varchar(200) not null,
    proyecto varchar (200) not null,
	imagen LONGBLOB not null 
);