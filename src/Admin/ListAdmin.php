<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Sonata\AdminBundle\Route\RouteCollectionInterface;
use Sonata\AdminBundle\FieldDescription\FieldDescriptionInterface;


final class ListAdmin extends AbstractAdmin
{

//    protected function configureRoutes(RouteCollectionInterface $collection): void
//    {
//        // Removing the list route will disable listing entities.
//        $collection->remove('list');
//    }

    protected function configureFormFields(FormMapper $form): void
    {
//        $form->add('c_id', TextType::class);
//        $form->add('title', TextType::class);
//        $form->add('url', TextType::class);
        $form->add('douban_id', TextType::class);
    }

    protected function configureDatagridFilters(DatagridMapper $datagrid): void
    {
        $datagrid->add('title');
        $datagrid->add('cId');
        $datagrid->add('doubanId');
        $datagrid->add('pic', null, [
            'role' => 'ROLE_ADMIN_MODERATOR'
        ]);//        $datagrid->add('updated_time');
    }

    protected function configureListFields(ListMapper $list): void
    {

        $list->addIdentifier('title', null, [
            'route' => [
                'name' => 'edit'
            ]
        ]);

//        $list->addIdentifier('title');
        $list->addIdentifier('douban_id');
//        $list->add('director');
        $list->add('page_date');
        $list->add('production_date');
        $list->add('pic');


//        $list->add('pic', FieldDescriptionInterface::TYPE_STRING, ['template' => '@SonataMedia/MediaAdmin/list_image.html.twig']);

//        $list->add('pic', null, [
//            'role' => 'ROLE_ADMIN_MODERATOR'
//        ]);


//        $list->add('updated_time');
//        $list->add('created_time');
//        $list->add('director');
    }

    protected function configureShowFields(ShowMapper $show): void
    {
        $show->add('c_id');
        $show->add('title');
        $show->add('url',);
        $show->add('production_date',);
        $show->add('pic', null, [
            'role' => 'ROLE_ADMIN_MODERATOR'
        ]);
//        $show->add('updated_time',);
//        $show->add('created_time',);
    }

}