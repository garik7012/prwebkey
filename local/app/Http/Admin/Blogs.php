<?php
namespace App\Http\Admin;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;
use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use SleepingOwl\Admin\Contracts\Initializable;

/**
 * Class Blogs
 *
 * @property \App\Blog $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Blogs extends Section
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $alias;

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return AdminDisplay::datatables()
            ->setHtmlAttribute('class', 'table-primary')
            ->setColumns(
                AdminColumn::text('id', '#')->setWidth('30px'),
                AdminColumn::link('title', 'заголовок')
            )->paginate(20);
    }
    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        return AdminForm::panel()->addBody([
            AdminFormElement::checkbox('is_public', 'опубликовать на сайт'),
            AdminFormElement::text('title', 'Заголовок публикации')->required(),
            AdminFormElement::text('anons', 'Краткий текст публикации для отображения')->required(),
            AdminFormElement::wysiwyg('text', 'Текст публикации'),
            AdminFormElement::image('preview', 'фото')->required()
                ->setUploadPath(function(\Illuminate\Http\UploadedFile $file) {
                    return 'images/blogs'; // путь сохранения файла относительно public. public -> appServiceProvider
                })
                ->setUploadSettings([
                    'orientate' => [],
                    'resize' => [600, null, function ($constraint) {
                        $constraint->upsize();
                        $constraint->aspectRatio();
                    }]
                ]),
            AdminFormElement::textarea('keywords', 'keywords'),
            AdminFormElement::textarea('description', 'description'),
            AdminFormElement::text('id', 'ID')->setReadonly(1),
            AdminFormElement::text('created_at')->setLabel('Создано')->setReadonly(1),
        ]);
    }
    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        // todo: remove if unused
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // todo: remove if unused
    }
}
