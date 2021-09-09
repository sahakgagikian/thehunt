<?php

namespace frontend\controllers;

use yii\web\Controller;

/**
 * Home controller
 */
class BlogController extends Controller
{
    /**
     * Displays right sidebar page.
     *
     * @return mixed
     */
    public function actionBlogRightSidebar()
    {
        return $this->render('blog-right-sidebar');
    }

    /**
     * Displays left sidebar page.
     *
     * @return mixed
     */
    public function actionBlogLeftSidebar()
    {
        return $this->render('blog-left-sidebar');
    }

    /**
     * Displays full width page.
     *
     * @return mixed
     */
    public function actionBlogFullWidth()
    {
        return $this->render('blog-full-width');
    }

    /**
     * Displays single post page.
     *
     * @return mixed
     */
    public function actionSinglePost()
    {
        return $this->render('single-post');
    }
}
