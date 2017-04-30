<?php
    use \Psr\Http\Message\RequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;
    
    require '../vendor/autoload.php';
    
    $app = new \Slim\App();
    
    // Get container
    $container = $app->getContainer();

    // Register component on container
    $container['view'] = function ($container) {
        $view = new \Slim\Views\Twig('../app/views/pages', [
            'cache' => false
        ]);

        // Instantiate and add Slim specific extension
        $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
        $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

        return $view;
    };

    // Render Twig template in route
    $app->get('/getSites', function ($request, $response, $args) {
        //$name = $request->getAttribute('name');
        $conn = getConnection();
        $sql = "SELECT * FROM ereporofficiel.site";
        $result = $conn->query($sql);
        foreach($result as $row) {
            $results[] = $row;
        }
        return $this->view->render($response, 'home.twig', [
            'results' => $results
        ]);
    })->setName('getSites');

    /**
     * get addEmployee form
     */
    $app->get('/addEmployee', function ($request, $response, $args) {
        return $this->view->render($response, 'employeeForm.twig');
    })->setName('addEmployee');

    /**
     * save employee
     */
    $app->post('/saveEmployee', function ($request, $response, $args ){

        $firstName = $request->getParam('firstName');
        $lastName =  $request->getParam('lastName');
        $fullName = $request->getParam('fullName');
        $dateEntrance = $request->getParam('dateEntrance');

        try {
            $conn = getConnection();
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $statement = $conn->prepare("INSERT INTO employer(full_name, name, first_name, date_entrance)
            VALUES(:full_name, :name, :first_name, :date_entrance)");
            $statement->execute(array(
                "full_name" => $fullName,
                "name" => $lastName,
                "first_name" => $firstName,
                "date_entrance" =>$dateEntrance
            ));
            echo "New record created successfully";
        }
        catch(PDOException $e)
        {
            echo $statement . "<br>" . $e->getMessage();
        }
    })->setName('saveEmployee');



    /**
     * @return PDO database connection
     */
    function getConnection() {
        $dbuser="root";
        $dbpass="root";
        $dbname="mysql:host=localhost;dbname=ereporofficiel";
        try {
            $dbh = new PDO($dbname, $dbuser, $dbpass);

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
        return $dbh;
    }

    $app->run();