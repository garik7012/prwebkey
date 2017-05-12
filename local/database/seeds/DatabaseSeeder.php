<?php

use Illuminate\Database\Seeder;
use App\Blog;
use App\Page;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(PagesSeeder::class);
    }
}
class BlogSeeder extends Seeder{
    public function run(){
        DB::table('blogs')->delete();
        Blog::create([
            'title' => '6 типичных ошибок при публикации постов в FB и способы их устранения',
            'anons' => 'Казалось бы, что может быть сложного в публикации постов в Фейсбуке? Принято считать, что с этой задачей справится',
            'text' => "Казалось бы, что может быть сложного в публикации постов в Фейсбуке? Принято считать, что с этой задачей справится любой школьник. Но одно дело, когда вы размещаете посты на своей личной странице, а другое – на корпоративной.",
            'preview' => 'img/blogs-preview.png',
            'is_public' => 1,
        ]);
        Blog::create([
            'title' => 'Как измерять эффективность маркетинговых кампаний в Google+',
            'anons' => 'Только ленивый не критиковал социальную сеть Google+ в первые месяцы после начала ее работы.',
            'text' => 'Только ленивый не критиковал социальную сеть Google+ в первые месяцы после начала ее работы. Несмотря на большое количество зарегистрированных пользователей, эта платформа выглядела пустой и безжизненной. Пользователи проводили здесь считанные секунды, часами общаясь в Facebook и других популярных сетях. Даже сотрудники Google месяцами ничего не писали в своих аккаунтах в Google+ еще в конце 2012 года, но регулярно публиковали сообщения в других сетях.',
            'preview' => 'img/blogs-preview.png',
            'is_public' => 1,
        ]);
        Blog::create([
            'title' => 'Влияет ли кнопка Google +1 на поисковую оптимизацию',
            'anons' => 'Google объясняет, для чего нужна кнопка «+1», но не объясняет, как она влияет на ранжирование страниц, и во что выльется',
            'text' => 'Google объясняет, для чего нужна кнопка «+1», но не объясняет, как она влияет на ранжирование страниц, и во что выльется усиленная интеграция поиска Google и социальной сети. Давайте немного подытожим то, что нам уже известно — для этого воспользуемся недавним материалом Mashable, а также спросим нескольких российских экспертов.',
            'preview' => 'img/blogs-preview.png',
            'is_public' => 1,
        ]);
    }
}

class PagesSeeder extends Seeder{
    public function run()
    {
        DB::table('pages')->delete();
        $pages = [
            '/' => 'Главная',
            '/services' => 'Услуги',
            '/keises' => 'Кейсы',
            '/clients' => 'Клиенты',
            '/business' => 'Бизнес',
            '/blog' => 'Блог',
            '/contacts' => 'Контакты',
            '/services/search-optimisation' => 'Поисковая оптимизация',
            '/services/search-optimisation/prodvigenie' => 'Продвижение сайтов',
            '/services/search-optimisation/audit' => 'Поисковый аудит',
            '/services/search-optimisation/education' => 'Обучение',
            '/services/internet-reklama' => 'Интернет реклама',
            '/services/internet-reklama/kontekst' => 'Контекстная реклама',
            '/services/internet-reklama/target' => 'Таргетированная реклама',
            '/services/internet-reklama/soc' => 'Реклама в соц сетях',
            '/services/reputation' => 'Управление репутацией',
            '/services/reputation/serm' => 'SERM',
            '/services/reputation/negative' => 'Работа с негативом',
            '/services/reputation/monitoring' => 'Мониторинг',
            '/services/lidogen' => 'Лидогенерация',
            '/services/lidogen/parsing' => 'Парсинг данных',
            '/services/copywriting' => 'Копирайтинг',
            '/services/copywriting/napolnenie' => 'Наполнение контентом',
            '/services/copywriting/public' => 'Составление публичной речи',
            '/services/copywriting/reklam' => 'Написание рекламных текстов',
            '/services/videomaking' => 'Видеопроизводство',
            '/services/videomaking/etaps' => 'Этапы производства',
            '/services/videomaking/price' => 'Стоимость видеоролика',
            '/services/konsalting' => 'PR консалтинг - Разработка стратегии',
            '/services/konsalting/monitoring' => 'PR консалтинг - Мониторинг',
            '/services/konsalting/modelirovanie' => 'PR консалтинг - Моделирование ситуации',
            '/services/smm' => 'SMM - Комплексный продукт',
            '/services/smm/video' => 'Продвижение видео',
            '/services/smm/wiki' => 'SMM - Википедия',
            '/services/smm/blogers' => 'SMM - Блоггеры>',
            '/services/smi' => 'Работа со СМИ',
            '/services/smi/jurn' => 'Взаимосвязь с журналистами',
            '/services/smi/public' => 'Публикации в интернет СМИ',
            '/services/smi/blokir' => 'Блокировка информации в СМИ',
        ];
        foreach ($pages as $link => $title)
        Page::create([
            'link' => $link,
            'title' => $title
        ]);
    }
}