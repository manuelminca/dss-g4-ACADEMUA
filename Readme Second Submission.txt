Minimum requirements:

Show listings for all the objects from the domain model:
    -Listing of the courses is in the menu bar called courses.
    -Listing all the categories is in the drop down list in create course.
    -Listing the users is in Instructors (we just show the teachers in this case)
    -Listing of all the comments is in each course, we show the listing of all the comments of a course(if a course
    doesn't have any comment it wont show any)
    -Listing of all the messages--> its necessary to go to localhost:8000/messages


Delete any object from the database.
    -To delete a course its necessary to click on Courses and then delete course.
    -To delete a user click on instructors and delete.
    -To delete a commentary go inside a course with commentaries and click on delete button.
    -To delete a category we haven't implemented the graphic option but it is necessary go to localhost:8000/categories/delete/{id}
    where the {id} is the id of the category that you want to delete.
    -To delete a message its necessary to go to localhost:8000/messages/delete/{id}

Create and modify objects of 3 different types (the others can be populated using Seeders).
    -To create a courses go to the menu bar and click on Add Course to modify it in Course and click on modify.
    -To add a category go to localhost:8000/categories/new
    -To add a user go to localhost:8000/users/new and to modify its necessary to go to Instructors->Modify
    -To add a comment go to a specific course and fill the new comment form on the bottom of the page.


Optional requirements:

Listing pagination.
    -The pagination is in Courses.

Sort listings by some criteria.
    -In courses it is possible to sort upward and downward.
Perform queries for one class with 2 different search criteria.
    -We can search by Name or by Price.
