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
        stage ('Push php image to Docker hub'){
            steps{
                sh "docker commit c503fd8ec2f5 rihardslodzins/phpapp"
                sh "docker tag rihardsapp rihardslodzins/phpapp"
                sh "docker login --username=rihardslodzins --email=rihardslodzins@gmail.com --password=Stulbieodi123"
                sh "docker push rihardslodzins/myapp"
            }
        }
        
    }
}
