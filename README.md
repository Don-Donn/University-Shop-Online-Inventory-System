# University-Shop-Online-Inventory-System
OVERVIEW

University Shop Online Inventory System is a web-based application designed to manage and streamline inventory processes for university shop. This system provides an efficient way to track and manage the stock of various products available in university store, offering a user-friendly interface for both customer, administrators and staff.
University Shop Online Inventory System has three kinds of users such as customer, admin and staff. 

University Shop Online Inventory System has the following features:

1. User Authentication: Secure login for customer, administrators and staff members.
2. Product Management and Transactions: Add, edit, and delete products in the inventory. Categorize products for easy navigation.
3. Account Management: Administrators can effortlessly create new admin and staff accounts also assigning passwords and edit them.
4. Staff Announcement: Staff members with the appropriate permissions can create and post announcements.
5. User Visibility : Users can view announcements upon logging into the system. Announcements are prominently displayed on the user interface for them to see immediately. Users have access to a comprehensive catalog showcasing all available products in the university shop. Detailed product information, including name, description, price, and stocks, also the image of the product.
6. User Roles: Differentiate between customer, administrator and staff roles with distinct permissions. Ensure secure access and data management.

TECHNOLOGIES USED

Frontend: HTML, CSS, JavaScript
Backend: Server-side scripting language (Php)
         Database (MySQL)
Version Control: Git for version control.

MANUAL:

User/Customer Side **** http://localhost/University-Shop-Online-Inventory-System/pages/loginCustomer.php
Example Login: ( Aleister Alinsunurin )
Email : 21-33273@g.batstate-u.edu.ph
Default Password : user

After you logged in, you will be directed to the customer side homepage and a pop up notification will appear and after you read the announcement you will just click okay confirmation. In the upper right header you will see the name of the user that was logged in, beside is the logout icon. And below that is the current date and time. Then here you can see all the images of the product the name of the product, the description or size of the product, the available quantity of the product and lastly the price of the product. This is a very user-friendly interface you can easily browse the available products here and products are arrange alphabetically and you just have to scroll down to view products below and that's it. To logout, you will just click this icon in the upper right corner and there will be a pop up confirmation, click no if you don't want to logout and just click yes to proceed to logout and you will be directed to customer side login page, and that's it for the customer side

Admin Side **** http://localhost/University-Shop-Online-Inventory-System/pages/loginAdmin.php
Example Login : ( Jason Tatum as admin)
Email : 1007@g.batstate-u.edu.ph
Default Password: admin

After you logged in, the admin will be directed to the admin home page. You can see in the upper right header, the name of the admin that was logged in. Below that you can see the current date and time. Then you can see the sidebar which you can navigate and access the product inventory table and accounts table. For the transaction and announcement, only the rgo staff can access it, the admin cannot click it. Also, the product table is for viewing only. For the Accounts, you can see the account table where in you can see the account email, account name, password and lastly the action. For the action column you can see the edit button and as you click the edit button you will directly go to the form of the edit account. At edit account form you can see the id of that person you want to edit and a new password to edit the password and as you click the update button the account password of that person will be updated and confirmed. Now to the accounts table, as you can see there is the icon of add account, color yellow. As you click it, you will be directed to the add account form and having the attributes of Id, First Name, Last name, user type, department, email, password and lastly confirm password to fill up. In the case of the department it will be an auto "RGO". And as you click the add button there will be an alert that will show if adding account was successful. To logout, you can see the logout button in the lower side of the sidebar, after you clicked on it the confirmation will pop up and there is a two options either yes or no, and you will just click the yes if you want to proceed to logout and no if you don't want to.

RGO Staff Side **** http://localhost/University-Shop-Online-Inventory-System/pages/loginRGOstaff.php
Example Login: (Staff Kimi Chu)
Email : 1008@g.batstate-u.edu.ph
Default Password : admin

After you logged in, the rgo staff will be directed to rgo home page. You can see in the upper right header, the name of the staff that was logged in. Below that you can see the current date and time. Then you can see the sidebar which you can navigate and access the product inventory table, transaction table and announcement table. For the accounts table only the admin can access it, the rgo staff cannot click it. Also, the product inventory table is for viewing only. For the transaction, as you click it there will be a form having an Add Product, Edit Product, Add Stocks and also Out Stocks. For the add product there is a form having a product category, product name, description, price and also product image then the add button for the confirmation to add the product after you fill up all of that. For the Edit Product there is a product id, description and price then the save button for the confirmation to save the product after you fill up all of that. For the add stocks there is a product id, quantity and transaction number to fill up and in the case of employee name and date those two are default, foe employee name it is the staff who are logged in and for the date it is the current date, then the add button for the confirmation to add the stocks after you fill up all of that. For the out stocks there is a product id, quantity sold and transaction number to fill up and in the case of employee name and date those two are default, for employee name it is the staff who are logged in and for the date it is the current date, then the update button for the confirmation to update the stocks after you fill up all of that. Also take a look for the announcement, there is a two form entitled announcement and posted announcement. On the announcement form, rgo will input the announcement on that form and click the post button to post the announcement. On the posted announcment form, you can see the output of the announcement and in that form you can edit the announcement by clicking the edit button and right after you can save it by clicking the save button, and lastly the clear button to erase all the inputted announcement.


