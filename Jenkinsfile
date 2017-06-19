pipeline {
    agent any
    stages{
        stage('Checkout Code'){
            steps{
                checkout scm
            }
        }
        stage ('Build Container'){
            steps {
                sh "docker-compose up -d"
            } 
        }
        stage ('Test db connection'){
            steps{
                sh "composer require --dev phpunit/dbunit"
                sh "phpunit --log-junit results/phpunit/phpunit.xml -c tests/phpunit.xml"
            }
        }
    }
}
