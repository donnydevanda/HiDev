<?php

use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            [   'users_id' => '1',
                'name' => 'Google',
                'location' => 'Jakarta, Indonesia',
                'role' => 'Software Engineer',
                'salary' => '15000000',
                'description' => 'Take design comps (both desktop and mobile) and develop them into fully functional WordPress sites.
                These sites will be built with HTML, SASS, CSS, JavaScript, PHP, JQuery, Bootstrap, Git.
                Develop WordPress theme customizations on new projects and existing client sites.
                Customize WordPress functions, custom fields and develop on proprietary plugins for client specific applications.
                Generate expert-level knowledge of competitive and complementary solutions and bring new ideas to the team.
                Develop with e-commerce frameworks (WooCommerce, Shopify, Payment Gateways, Integrations, etc.), multi-site deployments and advanced third-party integrations.',
                'image' => 'images/001-google.png'
            ],
            [   'users_id' => '1',
                'name' => 'Google',
                'location' => 'Jakarta, Indonesia',
                'role' => 'Database Engineer',
                'salary' => '12000000',
                'description' => 'Take design comps (both desktop and mobile) and develop them into fully functional WordPress sites.
                These sites will be built with HTML, SASS, CSS, JavaScript, PHP, JQuery, Bootstrap, Git.
                Develop WordPress theme customizations on new projects and existing client sites.
                Customize WordPress functions, custom fields and develop on proprietary plugins for client specific applications.
                Generate expert-level knowledge of competitive and complementary solutions and bring new ideas to the team.
                Develop with e-commerce frameworks (WooCommerce, Shopify, Payment Gateways, Integrations, etc.), multi-site deployments and advanced third-party integrations.',
                'image' => 'images/001-google.png'
            ],
            [   'users_id' => '1',
                'name' => 'Google',
                'location' => 'Jakarta, Indonesia',
                'role' => 'Game Tester',
                'salary' => '11000000',
                'description' => 'Take design comps (both desktop and mobile) and develop them into fully functional WordPress sites.
                These sites will be built with HTML, SASS, CSS, JavaScript, PHP, JQuery, Bootstrap, Git.
                Develop WordPress theme customizations on new projects and existing client sites.
                Customize WordPress functions, custom fields and develop on proprietary plugins for client specific applications.
                Generate expert-level knowledge of competitive and complementary solutions and bring new ideas to the team.
                Develop with e-commerce frameworks (WooCommerce, Shopify, Payment Gateways, Integrations, etc.), multi-site deployments and advanced third-party integrations.',
                'image' => 'images/001-google.png'
            ],
            [   'users_id' => '2',
                'name' => 'Facebook',
                'location' => 'Jakarta, Indonesia',
                'role' => 'Sr. Game Tester',
                'salary' => '12000000',
                'description' => 'Design, develop, improve, and deploy high quality backend services and APIs.
                Within a cross-functional team, collaborate with other engineers specializing in backend services, web frontend, mobile apps, and test automation, as well as product design and ideation.
                Apply design patterns and design principles to produce maintainable and easy to extend code.
                Handle integration with 3rd party API service (LinkAJA and other services)
                Make sure latency is minimum, and can handle scalability for simultaneous of API call
                Develop platform microservices',
                'image' => 'images/002-facebook.png'
            ],
            [   'users_id' => '2',
                'name' => 'Facebook',
                'location' => 'Jakarta, Indonesia',
                'role' => 'IT Architect',
                'salary' => '15000000',
                'description' => 'Design, develop, improve, and deploy high quality backend services and APIs.
                Within a cross-functional team, collaborate with other engineers specializing in backend services, web frontend, mobile apps, and test automation, as well as product design and ideation.
                Apply design patterns and design principles to produce maintainable and easy to extend code.
                Handle integration with 3rd party API service (LinkAJA and other services)
                Make sure latency is minimum, and can handle scalability for simultaneous of API call
                Develop platform microservices',
                'image' => 'images/002-facebook.png'
            ],
            [   'users_id' => '2',
                'name' => 'Facebook',
                'location' => 'Jakarta, Indonesia',
                'role' => 'Mobile Tester',
                'salary' => '18000000',
                'description' => 'Design, develop, improve, and deploy high quality backend services and APIs.
                Within a cross-functional team, collaborate with other engineers specializing in backend services, web frontend, mobile apps, and test automation, as well as product design and ideation.
                Apply design patterns and design principles to produce maintainable and easy to extend code.
                Handle integration with 3rd party API service (LinkAJA and other services)
                Make sure latency is minimum, and can handle scalability for simultaneous of API call
                Develop platform microservices',
                'image' => 'images/002-facebook.png'
            ],
            [   'users_id' => '3',
                'name' => 'Microsoft',
                'location' => 'Jakarta, Indonesia',
                'role' => 'Software Tester',
                'salary' => '10000000',
                'description' => 'Take design comps (both desktop and mobile) and develop them into fully functional WordPress sites.
                These sites will be built with HTML, SASS, CSS, JavaScript, PHP, JQuery, Bootstrap, Git.
                Develop WordPress theme customizations on new projects and existing client sites.
                Customize WordPress functions, custom fields and develop on proprietary plugins for client specific applications.
                Generate expert-level knowledge of competitive and complementary solutions and bring new ideas to the team.
                Develop with e-commerce frameworks (WooCommerce, Shopify, Payment Gateways, Integrations, etc.), multi-site deployments and advanced third-party integrations.',
                'image' => 'images/003-microsoft.png'
            ],
            [   'users_id' => '4',
                'name' => 'Twitter',
                'location' => 'Jakarta, Indonesia',
                'role' => 'Backend Developer',
                'salary' => '14500000',
                'description' => 'Design, develop, improve, and deploy high quality backend services and APIs.
                Within a cross-functional team, collaborate with other engineers specializing in backend services, web frontend, mobile apps, and test automation, as well as product design and ideation.
                Apply design patterns and design principles to produce maintainable and easy to extend code.
                Handle integration with 3rd party API service (LinkAJA and other services)
                Make sure latency is minimum, and can handle scalability for simultaneous of API call
                Develop platform microservices',
                'image' => 'images/004-twitter.png'
            ],
            [   'users_id' => '4',
                'name' => 'Twitter',
                'location' => 'Jakarta, Indonesia',
                'role' => 'Web Tester',
                'salary' => '12000000',
                'description' => 'Design, develop, improve, and deploy high quality backend services and APIs.
                Within a cross-functional team, collaborate with other engineers specializing in backend services, web frontend, mobile apps, and test automation, as well as product design and ideation.
                Apply design patterns and design principles to produce maintainable and easy to extend code.
                Handle integration with 3rd party API service (LinkAJA and other services)
                Make sure latency is minimum, and can handle scalability for simultaneous of API call
                Develop platform microservices',
                'image' => 'images/004-twitter.png'
            ],
            [   'users_id' => '5',
                'name' => 'Nike',
                'location' => 'Jakarta, Indonesia',
                'role' => 'IOS Developer',
                'salary' => '12000000',
                'description' => 'Take design comps (both desktop and mobile) and develop them into fully functional WordPress sites.
                These sites will be built with HTML, SASS, CSS, JavaScript, PHP, JQuery, Bootstrap, Git.
                Develop WordPress theme customizations on new projects and existing client sites.
                Customize WordPress functions, custom fields and develop on proprietary plugins for client specific applications.
                Generate expert-level knowledge of competitive and complementary solutions and bring new ideas to the team.
                Develop with e-commerce frameworks (WooCommerce, Shopify, Payment Gateways, Integrations, etc.), multi-site deployments and advanced third-party integrations.',
                'image' => 'images/005-nike.png'
            ],
            [   'users_id' => '6',
                'name' => 'Ducati',
                'location' => 'Bali, Indonesia',
                'role' => 'Backend Developer',
                'salary' => '8000000',
                'description' => 'Design, develop, improve, and deploy high quality backend services and APIs.
                Within a cross-functional team, collaborate with other engineers specializing in backend services, web frontend, mobile apps, and test automation, as well as product design and ideation.
                Apply design patterns and design principles to produce maintainable and easy to extend code.
                Handle integration with 3rd party API service (LinkAJA and other services)
                Make sure latency is minimum, and can handle scalability for simultaneous of API call
                Develop platform microservices',
                'image' => 'images/006-ducati.png'
            ],
            [   'users_id' => '7',
                'name' => 'Samsung',
                'location' => 'Jakarta, Indonesia',
                'role' => 'Frontend Developer',
                'salary' => '25000000',
                'description' => 'Take design comps (both desktop and mobile) and develop them into fully functional WordPress sites.
                These sites will be built with HTML, SASS, CSS, JavaScript, PHP, JQuery, Bootstrap, Git.
                Develop WordPress theme customizations on new projects and existing client sites.
                Customize WordPress functions, custom fields and develop on proprietary plugins for client specific applications.
                Generate expert-level knowledge of competitive and complementary solutions and bring new ideas to the team.
                Develop with e-commerce frameworks (WooCommerce, Shopify, Payment Gateways, Integrations, etc.), multi-site deployments and advanced third-party integrations.',
                'image' => 'images/007-samsung.png'
            ]
        ]);
    }
}
