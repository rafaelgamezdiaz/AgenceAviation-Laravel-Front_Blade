<?php

use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'id' => 1, 
            'category_id' => 1, 
            'name' => 'OLT – Online Training', 
            'description' => '<p>Online training platform to strengthen the knowledge, skills, attitudes and practices of teams of subnational LATAM officials (municipalities, departments, states and provinces) to lead processes to improve management for results and achieve greater efficiency and effectiveness at airports in Latin America and the Caribbean.</p>',
            'description2' => '',
            'image' => 'contact-breadcumb-bg.jpg'            
            ]);
        DB::table('projects')->insert([
            'id' => 2, 
            'category_id' => 1, 
            'name' => 'SGM – Sistema de Gestion de Manuales', 
            'description' => '<p>Aircraft Manuals Management System allows you to manage the information in the cloud and can access your computer or other devices.</p>',
            'description2' => '',
            'image' => 'contact-breadcumb-bg.jpg'            
            ]);
        DB::table('projects')->insert([
            'id' => 3, 
            'category_id' => 2, 
            'name' => 'Aseos', 
            'description' => '<p>The Cabin Toilet System allows the administration of airplanes, fleets, types and conditions of toilets among others that contribute to the realization and management of cabin production. By means of a dashboard it is possible to visualize the statuses of the activities in real time, to verify the critical items, to send reports and to carry out the planned toilets massively.</p>',
            'description2' => '',
            'image' => 'contact-breadcumb-bg.jpg'            
            ]);
        DB::table('projects')->insert([
            'id' => 4, 
            'category_id' => 2, 
            'name' => 'CASS (Continuous Analysis and Surveillance System)', 
            'description' => '<p>The system aims to optimize and control the cases of aircraft delays and AOGs, managing action plans to solve them and looking for medium-term action plans to correct errors that are repeated over time and minimize the operational impact on the company. In addition, it incorporates massive loaders that use the Excel sheets prepared by the analysts, in order to consolidate quickly and safely the delays of the day or the weekend.</p>
                              <p>Finally, it incorporates the possibility that the user himself generated dynamically and in real time reports in order to consolidate aggregate views for the generation of KPIs (key perfomance indexes) and to monitor the global management of aircraft and AOGs delays.</p>',
            'description2' => '',
            'image' => 'contact-breadcumb-bg.jpg'            
            ]);
        DB::table('projects')->insert([
            'id' => 5, 
            'category_id' => 2, 
            'name' => 'HCC Estacionamientos', 
            'description' => '<p>Slate that displays the arrival and departure times, indicates the position of the plane in the yard and at what time it must be unoccupied, records the movements of the aircraft in the yard, allows editing the toilet fields among other functions.</p>',
            'description2' => '',
            'image' => 'contact-breadcumb-bg.jpg'            
            ]);
        DB::table('projects')->insert([
            'id' => 6, 
            'category_id' => 2, 
            'name' => 'Hit List', 
            'description' => '<p>Project of a cabin impeccability system. Through this system it is sought to evaluate the cabins of all aircraft in the LATAM fleet and repair the damages found through maintenance work.</p>
                               <p>The Hit List Model gives visibility to the image state of the cabins of our fleet for later management with Maintenance and Product.</p>
                               <p>Monthly inspections of cabin impeccability are carried out, generating KPIs that show the percentage of elements without failure in a cabin. Reports that support the chain of damage management with Maintenance.</p>
                               <p>The measurements consist of the aesthetic inspection of cabin elements where the state of the elements that impact the passenger\'s travel experience is evaluated.</p>',
            'description2' => '',
            'image' => 'contact-breadcumb-bg.jpg'            
            ]);
        DB::table('projects')->insert([
            'id' => 7, 
            'category_id' => 2, 
            'name' => 'Maint Control', 
            'description' => '<p>The LAN Maint Control project aims to track the maintenance work during its execution.
            Through this follow-up we can have real-time updates on scheduling, resource usage, problem management, visual management, finding opportunities, and reassigning tasks and/or resources.</p>',
            'description2' => '',
            'image' => 'contact-breadcumb-bg.jpg'            
            ]);
        DB::table('projects')->insert([
                'id' => 8, 
                'category_id' => 3, 
                'name' => 'Bis Defendor', 
                'description' => '<p><strong>SAFE TO FLY, SAFE TO USE</strong></p>
                <p>Real people working together and avoiding aviation accidents.</p>
                <p><strong>Capture and report hazards in real time!</strong></p> 
                <p>Watch the current state of risks in aviation and make safety decisions based on critical issues pointed by our software, supported on the information provided by the entire aviation community, focusing on avoiding aviation accidents.</p>',
                'description2' => '<p><strong>TAKE ACTION</strong></p>
                <p>Collaboration makes the difference. So, imagine millions of operators, safety managers and supervisors working together towards a common goal: to improve safety, monitor threats more assertively, saving time and money.
                Reports sent by the entire community will avoid mishaps or incidents.</p>',
                'image' => 'contact-breadcumb-bg.jpg'            
                ]);
        DB::table('projects')->insert([
            'id' => 9, 
            'category_id' => 4, 
            'name' => 'AOG', 
            'description' => '<p>The proposed system will locate and verify aircraft on ground, identify the downtime and its location. The main objective is help users to standardize and optimize the search for parts, benefiting them with logistical processes, reducing the time for obtaining the part and consequently the time of the aircraft on ground.</p>
                              <p>This system provide a solution that will allow the company:</p>
                                <ul class="ul-lists" style="list-style-type: circle;">
                                    <li>Standardization</li>
                                    <li>Management control and relevant reports</li>
                                    <li>Performance Management</li>
                                    <li>Reliable shift-transfer information</li>
                                    <li>Logistic network availability</li>
                                </ul>',
            'description2' => '',
            'image' => 'contact-breadcumb-bg.jpg'            
            ]);
    }
}
