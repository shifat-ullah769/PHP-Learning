/*

Password Hashing:
    Before knowing about what is password hashing and how we do it, we need to know why we need password hashing.
    If we keep storing our password in our database as it is then if any hacker can hack our database and then he will know our clients password and then he can steal any client data or manipulate any client data.
    Which is a security risk for our users. But istead storing our password we store 'hash string' of our password then instead of being able to hack our database he will not know users password and can't login any user account or steal any user data. 
    
    So, hashing is a topic where we put our password and get the hash string of our password. Instead of storing our plain password in the database we store the hash string of our password.
    Hashing is a one way technique where we can encode our password to 'hash password stirng' but we can't get our password back from the 'hash password string'. 
    There's a question arsie now, how we will check our password during login then? 
    The answer is, we will hash the password user provide when login and hash that password to 'hash password string' and then we will check this hash string to our stored hash password string to verify the user password.
    As a result, if hacker know the hash string he will still unable to decode the password from the hash password string and without password he will not be able to login.
    In PHP we use 'password_hash()' to hash a password.
    

*/

