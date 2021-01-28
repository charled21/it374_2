# it374_semis
This repository is created in compliance with the BSIT - IT374 Semifinals requirement of Academic Year 2020-2021 of Father Saturnino Urios University.

## Required Composer
## Required Codeigniter 4 MVC Framework
## Preferred Source Code editor for scripting (Sublime, VS Code, Notepad++ etc)
## PHP Version 7.0 , preferrably latest
## XAMPP v3.2.4 or much recent version, Apache
## Basic knowledge in PHP


The directory for individual files uploaded are as follows:

it374semi / app / Views / templates / header.php
it374semi / app / Views / templates / footer.php
it374semi / app / Pages / main.php
it374semi / app / Controllers / Pages.php
it374semi / app / Config / App.php
it374semi / app / Config / Autoload.php

Option 1: copy files individually to designated directories inside codeigniter4
Option 2: extract the it374semi.rar as a whole inside codeigniter4 folder

#------------------------------------------------------------------------------------------------------------------------------------------------------#
Installation Guide

Installation of Codeigniter using Composer

Step 1: Download and Install Latest version of Composer
Step 2: Run cmd then navigate to folder above project root folder.
        
        For example, commands are: [cd\]  
                                   [cd xampp]  
                                   [cd htdocs]  
                                   [cd codeigniter4]
                                   
Step 3: Type in [composer create-project codeigniter4/appstarter nameOfProject]   -- with nameOfProject intended for project folder name like mine "it374semi"

#------------------------------------------------------------------------------------------------------------------------------------------------------#
Running Program

Step 1: Execute Apache through XAMPP
Step 2: Open cmd 
Step 3: Navigate to created project root directory, in my case "it374semi"
        
        For example, commands are: [cd\]
                                   [cd xampp]
                                   [cd htdocs]
                                   [cd codeigniter4]
                                   [cd it374semi]
                                   [php spark serve]
                                   
Step 4: Open on browser address (localhost:8080/main)
