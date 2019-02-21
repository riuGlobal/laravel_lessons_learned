<html>
    
    <head>

    	<title>Part2: TODO: set title</title>
        
        
    </head>
    
    <body> 
    
  <h1> Part 2: TODO title  </h1> 

        <h2>  working with git </h2>

       <p> // Some git basic experiencies <br>
        	// create a repository: <br>
        		use git init<br>
        		git clone<br>
        		git commit -m<br> 
        		git push<br>

        	// create branch<br> 
        		create branches (branch -b)<br>
        		checkout ( for navigation)<br>
        		merge ????<br>
        	<br><br>



        // collaboration.<br>
        	Using pull requests<br>
        	Using Collaborators<br>


        // transfering ownership <br> 
        	//need to write name of repository for confirmation.
        	// I believe i need to erase fork. Not sure tho. <br>

</p>





        <h2> git and laravel  </h2>

        <p> After exporting a project to git to be used  some stuff must be done before hand: <br> 
        	a) copy .env.example to .env (use ls -a to see hidden files starting with '.') <br>
        	b) use 'composer install' to install dependencies, they are not shipped when using repository. <br>
        	c) use 'php artisan key:generate' this will build a key and sotre in .env <br> 
        	Now is ready to use. <br>

        	https://www.youtube.com/watch?v=ISVaMijczKc&list=PL55RiY5tL51pgPovJKg6HFMFqiGNSZtQ5&index=5&t=3s



        </p>

        <h2> using azure for deploying </h2>

        <p> check remaining credits here:  https://www.microsoftazuresponsorships.com/Balance
            
        <br>* how to set up a web service app with linux
        <br>* how to set up git in order to be able to update with a simple push. 
        <br>* how to manually set up  the page. 
        <br>--->copy .env.example to .env
        <br>---> Install composer on /repositories
        <br>---> use php artisan key:generate
        <br>---> copy all files (use -r) to site/wwwroot
        <br>* how to write .deployment file and its pourpose
        <br>* the shell script called in order to automate process for deployment
        <br>* (NOT IDEAL) use php's header  function to redirect.
        
        
        
        
        </p>
        
        <h3> IMPORTANT: stuff that didnt work </h3>
            <p>* Using PROJECT for deployment either on .deployment file or on Apllication setting wont work
                <br>--->WHY: it will only copy the target folder to /site/wwwroot meaning it will ignore the rest. This would be usefull in a scenario where multiple projects are stored on the same repository and for deployment only  a particular folder must be considered ( rest must be ignored).
                <br>* Many solutions refer to the use of "Virtual paths" this is not posible when using the windows distro
                <br>* using .htaccess is not working either. (FURTHER TESTING needed)
                
            
            
            </p>
            
        <h2> testing basic editing </h2>
        
        
        <h2> testing controllers </h2>
            

    </body>
</html>