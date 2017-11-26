USE FEDERATION ROOT WITH RESET
GO

CREATE TABLE users (
    id UNIQUEIDENTIFIER NOT NULL,
    username NVARCHAR(255) NOT NULL,
    password NVARCHAR(255) NOT NULL,
    salt NVARCHAR(255) NOT NULL,
    roles NVARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
);
GO

CREATE FEDERATION User_Federation(user_id UNIQUEIDENTIFIER RANGE)
GO

USE FEDERATION User_Federation(user_id='00000000-0000-0000-0000-000000000000') WITH RESET, FILTERING=OFF
GO


CREATE TABLE task_types (
    id UNIQUEIDENTIFIER NOT NULL,
    label NVARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
);

INSERT INTO task_types (id, label) VALUES (NEWID(), 'Work');
INSERT INTO task_types (id, label) VALUES (NEWID(), 'Home');
INSERT INTO task_types (id, label) VALUES (NEWID(), 'Other');

CREATE TABLE tasks (
    id UNIQUEIDENTIFIER NOT NULL,
    user_id UNIQUEIDENTIFIER NOT NULL,
    type_id UNIQUEIDENTIFIER DEFAULT NULL,
    subject NVARCHAR(255) NOT NULL,
    dueDate DATETIME2(6) NOT NULL,
    PRIMARY KEY (id, user_id),
) FEDERATED ON (user_id=user_id);

CREATE INDEX IDX_50586597A76ED395 ON tasks (user_id);

CREATE INDEX IDX_50586597C54C8C93 ON tasks (type_id);

ALTER TABLE tasks ADD CONSTRAINT FK_50586597C54C8C93 FOREIGN KEY (type_id) REFERENCES task_types(id)
GO
