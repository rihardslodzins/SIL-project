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
                sh "phpunit dbTest"
            }
        }
    }
}
