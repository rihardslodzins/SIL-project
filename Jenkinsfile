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
    
        stage('Verify Tools'){
            steps{
                parallel (
                    node: {sh "npm -v"},
                    docker: {sh "docker -v"}
                )
            }
        }
        stage ('Build Container'){
            steps {
                sh "docker-compose up -d"
            } 
        }
    }
}
