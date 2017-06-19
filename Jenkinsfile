pipeline {
    agent any
    tools{
        nodejs 'nodejs'
    }
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
    }
}
