CREATE TABLE uzytkownicy (
    ID INT IDENTITY(1,1) CONSTRAINT klucz PRIMARY KEY,
    Login VARCHAR (200),
    Haslo VARCHAR (200),
);
