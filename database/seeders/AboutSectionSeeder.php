<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutSection;

class AboutSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutSection::create([
            'id' => 1,
            'title_en' => 'Excel in the world of technology, your strategic partner in achieving success',
            'title_ar' => 'تفوق في عالم التكنولوجيا شريكك الاستراتيجي في تحقيق النجاح',
            'description_en' => 'Welcome to our website! We are a leading company in the Saudi market, providing the best specialized solutions to meet your effective and innovative needs. Through our extensive experience, we seek to provide distinguished solutions in various sectors to ensure your success and sustainability in business.',
            'description_ar' => 'مرحبًا بك في موقعنا الإلكتروني! نحن شركة رائدة السوق السعودي، ونقدم أفضل الحلول المتخصصة لتلبية احتياجاتك الفعّالة والمبتكرة. نسعى من خلال خبرتنا الواسعة إلى توفير حلول متميزة في مختلف قطاعاتنا لضمان نجاحك واستدامتك في الأعمال.',
        ]);
        AboutSection::create([
            'id' => 2,
            'title_en' => 'Excel in the world of technology, your strategic partner in achieving success',
            'title_ar' => 'تفوق في عالم التكنولوجيا شريكك الاستراتيجي في تحقيق النجاح',
            'description_en' => 'We offer a variety of services including general contracting, air conditioning and refrigeration works, interior design and decoration, feasibility studies and management consulting, website and application development, and refrigerated storage and transportation solutions. We work to provide innovative and effective solutions to help you achieve your goals through integrated strategies and the latest technologies in various sectors to ensure the success and sustainability of your project.',
            'description_ar' => 'نقدم خدمات متنوعة تشمل المقاولات العامة، أعمال التكييف والتبريد،  التصميم الداخلي والديكور، دراسات الجدوى والإستشارات الإدارية، تطوير المواقع والتطبيقات، وحلول التخزين والنقل المبرد. نعمل على توفير حلول مبتكرة وفعّالة لمساعدتك في تحقيق أهدافك من خلال استراتيجيات متكاملة وأحدث التقنيات في مختلف القطاعات لضمان نجاح مشروعك واستدامته.',
        ]);
        AboutSection::create([
            'id' => 3,
            'title_en' => 'Latest technology',
            'title_ar' => 'أحدث التقنيات',
            'description_en' => 'We use the latest technologies in artificial intelligence, machine learning, and cloud computing to grow your business. We also rely on advanced security systems to protect your data. We use big data analytics techniques to improve performance and provide customized solutions. We ensure that your goals are achieved through innovation and advanced technology.',
            'description_ar' => 'نستخدم أحدث التقنيات في الذكاء الاصطناعي، تعلم الآلة، وتقنيات الحوسبة السحابية لتطويرأعمالك. كما نعتمد على أنظمة أمان متقدمة لحماية بياناتك. نستخدم تقنيات تحليل البيانات الكبيرة لتحسين الأداء وتقديم حلول مخصصة. نضمن تحقيق أهدافك من خلال الابتكار والتكنولوجيا المتطورة.',
        ]);
        AboutSection::create([
            'id' => 4,
            'title_en' => 'Unique solutions',
            'title_ar' => 'حلول فريدة من نوعها',
            'description_en' => 'We offer unique solutions that include advanced air conditioning systems, customized feasibility studies, and innovative interior designs. We combine modern technology with practical expertise to provide solutions tailored to your needs, ensuring the highest levels of efficiency and success in all aspects of your business.',
            'description_ar' => 'نقدم حلولًا فريدة من نوعها تشمل أنظمة تكييف متقدمة، خدمات دراسات الجدوى المخصصة، وتصميمات داخلية مبتكرة. ندمج التكنولوجيا الحديثة مع الخبرة العملية لتوفير حلول مصممة خصيصًا لتلبية احتياجاتك، مما يضمن تحقيق أعلى مستويات الكفاءة والنجاح في جميع جوانب عملك.',
        ]);
        AboutSection::create([
            'id' => 5,
            'title_en' => 'Powerful strategies',
            'title_ar' => 'استراتيجيات قوية',
            'description_en' => 'We rely on strong strategies based on a comprehensive analysis of the market and environment, which helps in making informed decisions to improve performance and achieve growth. Through strategic planning and implementing effective solutions, we ensure that you achieve your goals efficiently, while ensuring sustainability and excellence in the competitive business environment.',
            'description_ar' => 'نعتمد على استراتيجيات قوية مبنية على تحليل شامل للسوق والبيئة، مما يساعد في اتخاذ قرارات مدروسة لتحسين الأداء وتحقيق النمو. من خلال التخطيط الاستراتيجي وتنفيذ الحلول الفعالة، نضمن لك تحقيق أهدافك بكفاءة، مع ضمان الاستدامة والتفوق في بيئة العمل التنافسية.',
        ]);
    }
}
