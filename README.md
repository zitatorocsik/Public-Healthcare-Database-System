# Public-Healthcare-Database-System
## Using MySQL we created a database for all the medical facilities in Montreal* 
*(all employee and facility information were made up by us to demonstrate the database and GUI). 
### The following UML diagram shows the design of our database:

![image](https://github.com/zitatorocsik/Public-Healthcare-Database-System/assets/30054142/eb3bd1dd-6d98-4ac6-9d6e-46c0ad86b4f6)

### The entire database is in Boyce-Codd Normal Form to minimize redundancy and to optimize the database for fastest search and querying. 

## Database Features:
### - health tracking system: any employee that has been infected with COVID or any other virus will be input in the system and their coworkers will be notified by email. The infected employee cannot be scheduled for the following two weeks.
### - automatic employee scheduling: every week employees are scheduled for their shifts--infections and previous work schedules are taken into account
### - vaccination tracking system: all employee vaccinations are tracked--if an employee was last vaccinated more than 6 months ago, a new vaccine must be administered for the employee to be allowed scheduled
### - facility capacities are taken into account -- no facility can go over their employee limit
### - each facility can only have one general manager
### - employees that were infected will have their shifts canceled for the following two weeks
### - emails sent to every employee every sunday about their schedule for the week
All of these features are enforced using triggers and constraints in MySQL. 

## In addition to the database, we have created a GUI using PHP for easy access by facility admins. The following pictures demonstrate the GUI:

# GUI
![image](https://github.com/zitatorocsik/Public-Healthcare-Database-System/assets/30054142/915e8bda-bcf9-4160-81f9-d4c62c154751)
![image](https://github.com/zitatorocsik/Public-Healthcare-Database-System/assets/30054142/7cb710d6-1ffc-44b6-b233-8e2a7b42cfa9)
