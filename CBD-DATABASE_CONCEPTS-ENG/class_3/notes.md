# Create db table:
CREATE TABLE SCHEDULE(
    Date varchar(255),
    Day varchar(255),
    Afternoon varchar(255),
    Evening varchar(255)
);

# Delete a table:
DROP TABLE <TABLE_NAME>
eg: DROP TABLE SCHEDULE;

# Add a column to the table:
ALTER TABLE <TABLE_NAME> ADD <COLUMN_NAME> VARCHAR(255);
eg: ALTER TABLE SCHEDULE ADD Signature VARCHAR(255);
eg: ALTER TABLE SCHEDULE ADD Roll_no VARCHAR(255);


# Deleting a field(Column):
ALTER TABLE <TABLE_NAME> DROP <COLUMN_NAME>;
eg: ALTER TABLE SCHEDULE DROP Roll_no;
eg: ALTER TABLE SCHEDULE DROP Signature;

# TUTS:
- https://www.w3schools.com/sql/sql_create_table.asp