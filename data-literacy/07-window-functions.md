# Data Analysis: Window Functions

**Preparation:**

https://youtu.be/7NBt0V8ebGk?si=ZrUEwYFTtqYWK7Nw



## **Exercises**

**In the pokemon dataset**

**A)** Write a query to calculate the [running total](https://learnsql.com/blog/what-is-a-running-total-and-how-to-compute-it-in-sql/) of HP for each Pokemon grouped by its primary type. Order the results by the Pokemon's `pokedex_number` within each `primary_type`.

**B)** Write a query to rank Pokemon by their `speed` stat within each `primary_type`. Display the `primary_type`, `pokedex_number`, `name`, `speed`, and the rank.

**C)** Write a query to find the top 3 Pokemon by `special_attack` within each `primary_type`. Display the `primary_type`, `pokedex_number`, `name`, `special_attack`, and the rank.

**D)** Write a query to identify Pokemon whose `speed` stat is above the average speed of their `primary_type`. Display the `primary_type`, `pokedex_number`, `name`, `speed`, and the average speed of the `primary_type`.



**In the Employees & Departments dataset**

**A)** Write a query to calculate the cumulative salary of employees within each department. Display the `department_number`, `employee_name`, `salary`, and the cumulative sum of `salary` ordered by `hiredate`.

**B)** Write a query to identify employees whose salary is above the average salary of their department. Display the `department_number`, `employee_name`, `salary`, and the average salary of the department.

**C)** Write a query to calculate the year of employment (`hiredate` year) for each employee and rank them within their department based on their hire date. Display the `department_number`, `employee_name`, `hiredate`, `employment_year`, and the rank.

**D)** Write a query to find the top 3 highest earners in each department. Display the `department_number`, `employee_name`, `salary`, and their rank within the department.



**Advanced**

**E)** Write a query to calculate the difference in salary between an employee and the employee hired immediately before them within each department, ordered by `hiredate`.

- Hint: Use the LAG() function: https://www.mysqltutorial.org/mysql-window-functions/mysql-lag-function/

**F)** Write a query to identify departments with the highest average commission per employee, considering only those employees who have a commission. Display the `department_number`, `department_name`, and the average commission.

**G)** Write an SQL query to divide the Pokemon into percentile groups based on their **`speed`** stat. Specifically, you should group the Pokemon into the following percentile ranges: 0-10%, 10-20%, ..., up to 90-100%. For each percentile range, calculate the number of Pokemon that fall into that range.

The two columns in the output:

1. **`percentile_range_end`**: The upper bound of the percentile range (e.g., 10, 20, ..., 100).
2. **`pokemon_count`**: The number of Pokemon that fall into that percentile range based on their **`speed`**.

- Ensure that the results are sorted by the **`percentile_range_end`** in ascending order.
  - Hint: use NTILE() function: https://www.mysqltutorial.org/mysql-window-functions/mysql-ntile-function/
  - Hint: use WITH() function: https://www.tutorialspoint.com/mysql/mysql-common-table-expression.htm#:~:text=The%20MySQL%20WITH%20clause%20is,in%20MySQL%20versions%20before%208.0.

#### **Expected Output:**

The result should look like this:

| percentile_range_end | pokemon_count |
| -------------------- | ------------- |
| 10                   | X             |
| 20                   | Y             |
| 30                   | Z             |
| ...                  |               |



