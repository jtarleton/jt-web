
<?php
/*
*
*
*
*/

class genFilter extends sfFilter
{
    public function execute ($filterChain)
    {




    	if( $this->isFirstCall() )
    	{
	    	//RegisterNotify::initialize();
    	}




	    echo "In filter";

        $context = $this->getContext();
        $request = $context->getRequest();
		$response = $context->getResponse();

        $controller = $context->getController();

        $module = strtolower($context->getModuleName());
        $action = strtolower($context->getActionName());

        //SysConfig::getInstance();
		//$session = GeneralSession::getInstance();


		// Set the application title

      //  $response->setTitle( KVStore::getInstance()->get('APPLICATION_NAME','NOT SET') );

		//Context::initialize();







        /*
        * Authentication
        */

    	if(0){ // ! $session->IsAuthenticated() )
    	
        	if( $module != 'security' && $module != 'user' && $module != 'utility' && $module != 'graphs' )
        	{
	        	// If module is 'ajax', we have a special stop point

	        	if( $module == 'ajax' )
	        		return $controller->redirect('security/ajax');

	        	// Otherwise, redirect to security/login
       			return $controller->redirect('security/login');
   			}
		}






        if(0){ //$session->IsAuthenticated() )
        
	        try
	        {
	        	//$user = new User( $session->getUser() );
        	}
	        catch( Exception $e )
	        {
		        //$session->clear();
	        	return $controller->redirect('security/login');
        	}

	        /* Validate that the user is still active

	        if( $user->getState() != 'A' )
	        {
		        $session->clear();

	        	if( $module == 'ajax' )
	        		return $controller->redirect('security/ajax');

	        	return $controller->redirect('security/login');
        	}

			if( ! $user->hasPriv('user') )
	        {
		        $session->clear();

	        	if( $module == 'ajax' )
	        		return $controller->redirect('security/ajax');


		        $session->setFlash('notice','You are not authorized to access this application.');
	        	return $controller->redirect('security/login');
        	}
*/

	        // Set the user object into our Context
        	//Context::setUser( $user );

    	}





        // Execute next filter in the chain

        $filterChain->execute();


        // Add nocache pragmas
        $response->setHttpHeader('Cache-Control', 'private, must-revalidate, no-cache, no-store');
        $response->setHttpHeader('Pragma','no-cache');
        $response->setHttpHeader('Expires',0);


    }
}

