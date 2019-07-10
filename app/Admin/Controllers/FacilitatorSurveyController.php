<?php

namespace App\Admin\Controllers;

use App\facilitatorsurvey;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class FacilitatorSurveyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\facilitatorsurvey';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new facilitatorsurvey);

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('objectives', __('Objectives'));
        $grid->column('explain', __('Explain'));
        $grid->column('describe', __('Describe'));
        $grid->column('list', __('List'));
        $grid->column('materials', __('Materials'));
        $grid->column('prepare', __('Prepare'));
        $grid->column('delivery', __('Delivery'));
        $grid->column('modules', __('Modules'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(facilitatorsurvey::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('objectives', __('Objectives'));
        $show->field('explain', __('Explain'));
        $show->field('describe', __('Describe'));
        $show->field('list', __('List'));
        $show->field('materials', __('Materials'));
        $show->field('prepare', __('Prepare'));
        $show->field('delivery', __('Delivery'));
        $show->field('modules', __('Modules'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new facilitatorsurvey);

        $form->number('user_id', __('User id'));
        $form->text('objectives', __('Objectives'));
        $form->text('explain', __('Explain'));
        $form->text('describe', __('Describe'));
        $form->text('list', __('List'));
        $form->text('materials', __('Materials'));
        $form->text('prepare', __('Prepare'));
        $form->text('delivery', __('Delivery'));
        $form->text('modules', __('Modules'));

        return $form;
    }
}
