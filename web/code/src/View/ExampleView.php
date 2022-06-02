<?php

declare(strict_types = 1);

namespace Example\View;

use Example\Model\ExampleModel;
use Mini\Controller\Exception\BadInputException;

/**
 * Example view builder.
 */
class ExampleView
{
    /**
     * Example data.
     * 
     * @var Example\Model\ExampleModel|null
     */
    protected $model = null;

    /**
     * Setup.
     * 
     * @param ExampleModel $model example data
     */
    public function __construct(ExampleModel $model)
    {
        $this->model = $model;
    }

    /**
     * Get the ExampleModel object data and pass to the view
     * 
     * @param ExampleModel
     * 
     * @return ExampleModel object
     *
     * @throws BadInputException if id is not found
     */
    // Take in the ExampleModel object as a parameter
    public function getModel(ExampleModel $em){
        // Verify the ExampleModel object is initialized with data
        if(!$em->getId()) {
            throw new BadInputException('Invalid ID: ExampleModel object not initialized!');
        }
        // Pass the ExampleModel object/data to the view
        return view('app/example/detail', ['em' => $em->getExampleModel()]);
    }
    /**
     * Get the sum value to pass to the view.
     * 
     * @param int $sum
     * 
     * @return string view ExampleModel
     *
     * @throws BadInputException if id is not found
     */
    public function getSum(int $sum){
        // Check sum value is initialized
        if(!$sum) {
            throw new BadInputException('Sum not found!');
        }

        // Pass sum value to the view
        return view('app/example/sum', ['sum' => $sum]);
    }
}
