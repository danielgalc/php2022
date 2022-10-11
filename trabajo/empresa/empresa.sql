
CREATE TABLE departamentos (
    id           bigserial    PRIMARY KEY
  , codigo       numeric(2)   NOT NULL UNIQUE
  , denominacion varchar(255) NOT NULL
);