<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'id' => 1,
            'title_en' => 'Refrigeration and air conditioning',
            'desc_en' => 'The refrigeration and air conditioning sector in Saudi Arabia is one of the largest sectors in the construction industry, due to the hot and dry climate that extends for most months of the year. This sector is witnessing continuous growth driven by several factors, including urban expansion, mega projects, and the increasing demand for energy-efficient cooling solutions.',
            'title_ar' => 'التبريد والتكييف',
            'desc_ar' => 'يُعد قطاع التبريد والتكييف في المملكة العربية السعودية واحدًا من أكبر القطاعات في مجال البناء والتشييد، نظرًا لطبيعة المناخ الحار والجاف الذي يمتد لمعظم أشهر السنة. يشهد هذا القطاع نموًا مستمرًا مدفوعًا بعدة عوامل، من بينها التوسع العمراني، والمشاريع الضخمة، والطلب المتزايد على حلول التبريد الموفرة للطاقة.',
            'image' => 'services/mecvNfS9KKOVnfzekujxxbFdNvdHiy3Y6R3uCxcu.jpg',
            'banner' => 'services/ibZcTWfNPEEeljeOE4TLcYiUxlFxL70gzH5HHqwL.jpg',
            'created_at' => '2025-02-21 05:14:03',
            'updated_at' => '2025-02-21 05:14:03',
        ]);
        Service::create([
            'id' => 2,
            'title_en' => 'Contracting',
            'desc_en' => 'Contracting is an economic sector specialized in the implementation of construction and building projects, including construction, renovation, civil engineering, infrastructure, and maintenance works. Contracting plays a major role in the development of cities and residential, commercial, and industrial projects.',
            'title_ar' => 'المقاولات',
            'desc_ar' => 'المقاولات هي قطاع اقتصادي متخصص في تنفيذ مشاريع البناء والتشييد، وتشمل أعمال البناء، الترميم، الهندسة المدنية، البنية التحتية، وأعمال الصيانة. تلعب المقاولات دورًا رئيسيًا في تطوير المدن والمشاريع السكنية والتجارية والصناعية.',
            'image' => 'services/sP3lVRa0mZSsDKR1kxr1wXc1Qu9PgiejhgB3V8R2.jpg',
            'banner' => 'services/2xtJ6YFHXIgCse8lEhyq2Ilf03ih2D61IEvli05X.jpg',
            'created_at' => '2025-02-21 05:44:12',
            'updated_at' => '2025-02-21 05:44:12',
        ]);
        Service::create([
            'id' => 3,
            'title_en' => 'Rental and investment solutions',
            'desc_en' => 'Leasing and investment solutions refer to strategies and services that allow individuals and businesses to lease or invest in real estate, equipment, and assets to generate financial returns or meet operational needs without having to purchase the assets outright.',
            'title_ar' => 'الحلول الايجارية والاستثمارية',
            'desc_ar' => 'تشير الحلول الإيجارية والاستثمارية إلى الاستراتيجيات والخدمات التي تتيح للأفراد والشركات استئجار أو استثمار العقارات والمعدات والأصول لتحقيق عوائد مالية أو تلبية احتياجات تشغيلية دون الحاجة إلى شراء الأصول بشكل مباشر.',
            'image' => 'services/ScK80juNQaKhkQflmo7PPmuclB6qQgeLs1A8c6Bd.jpg',
            'banner' => 'services/N4ZhSlQDRzVUvjJOa1QILcLn4GYhUh6LFWxeCD1A.jpg',
            'created_at' => '2025-02-21 05:46:03',
            'updated_at' => '2025-02-21 05:46:03',
        ]);
        Service::create([
            'id' => 4,
            'title_en' => 'Subsistence sector',
            'desc_en' => 'The catering sector is a sector specialized in providing food and beverage services to large institutions and facilities such as hospitals, schools, companies, camps, events, Hajj and Umrah. The sector includes food preparation, distribution, storage, and management of food operations according to quality and food safety standards.',
            'title_ar' => 'قطاع الاعاشة',
            'desc_ar' => 'قطاع الإعاشة هو قطاع متخصص في توفير خدمات الطعام والشراب للمؤسسات والمرافق الكبيرة مثل المستشفيات، المدارس، الشركات، المعسكرات، الفعاليات، والحج والعمرة. يشمل القطاع إعداد الطعام، التوزيع، التخزين، وإدارة عمليات التغذية وفق معايير الجودة والسلامة الغذائية.',
            'image' => 'services/gOTbejE61Ndg67hEW3PRoThLfor210wjcOcKljWK.jpg',
            'banner' => 'services/ApXdBwqyAt2SO6pyOCIQwjvFzmLmIqgf1UxNL2k0.jpg',
            'created_at' => '2025-02-21 05:50:22',
            'updated_at' => '2025-02-21 05:50:22',
        ]);
        Service::create([
            'id' => 5,
            'title_en' => 'Feasibility Studies and Management Consulting Sector',
            'desc_en' => 'The Feasibility Studies and Management Consulting sector is a sector specialized in providing strategic analysis and planning for companies and institutions, with the aim of achieving growth, improving performance, and making successful investment and management decisions. This sector includes preparing economic feasibility studies, providing organizational consulting, improving operations, and developing business strategies.',
            'title_ar' => 'قطاع دراسات الجدوى والإستشارات الإدارية',
            'desc_ar' => 'قطاع دراسات الجدوى والاستشارات الإدارية هو قطاع متخصص في تقديم التحليل والتخطيط الاستراتيجي للشركات والمؤسسات، بهدف تحقيق النمو، تحسين الأداء، واتخاذ قرارات استثمارية وإدارية ناجحة. يشمل هذا القطاع إعداد دراسات الجدوى الاقتصادية، تقديم استشارات تنظيمية، تحسين العمليات، وتطوير استراتيجيات العمل.',
            'image' => 'services/yEyjAKaKJzieExyzHWnxy6H3mUopzLFemmtwBwmU.jpg',
            'banner' => 'services/IR2Bi2AitNpH1ySsoB15QsDOWCtIPosM3gUPrrHS.jpg',
            'created_at' => '2025-02-21 05:55:57',
            'updated_at' => '2025-02-21 05:55:57',
        ]);
    }
}
