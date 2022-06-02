<?php

declare(strict_types = 1);

namespace Example\Controller;

use Example\Model\ExampleModel;
use Example\View\ExampleView;
use Mini\Controller\Controller;
use Mini\Controller\Exception\BadInputException;
use Mini\Http\Request;

/**
 * Example entrypoint logic.
 */
class ExampleController extends Controller
{
    /**
     * Example view model.
     * 
     * @var Example\Model\ExampleModel|null
     */
    protected $model = null;

    /**
     * Example view builder.
     * 
     * @var Example\View\ExampleView|null
     */
    protected $view = null;

    /**
     * Setup.
     * 
     * @param ExampleModel $model example data
     * @param ExampleView  $view  example view builder
     */
    public function __construct(ExampleModel $model, ExampleView $view)
    {
        $this->model = $model;
        $this->view  = $view;
    }

    /**
     * Create an example and display its data.
     * 
     * @param Request $request http request
     * 
     * @return string view template
     */
    public function createExample(Request $request){
        if (! $code = $request->request->get('code')){
            throw new BadInputException('Example code missing');
        }

        if (! $description = $request->request->get('description')) {
            throw new BadInputException('Example description missing');
        }

        // Set the post request data on the ExampleModel object
        $this->model->set($code, $description, now());

     
        // Create the new Model record and pass only the ExampleModel object to the view
        return $this->view->getModel(
            $this->model->create()
        );
    }

    /**
     * sumExample
     * 
     * @param Request $request http request
     * 
     * @return int sum value
     */
    public function sumExample(Request $request){
        // Validate 
        if (! $value1 = $request->request->get('value1')) {
            throw new BadInputException('Example value1 missing');
        }

        if (! $value2 = $request->request->get('value2')) {
            throw new BadInputException('Example value2 missing');
        }
        
        // Calculate sum based on input requests
        $sum = $value1 + $value2;

        // Return calculated sum value to view
        return $this->view->getSum($sum);
    }
}
