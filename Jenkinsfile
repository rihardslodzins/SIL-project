pipeline {  
    agent{
        docker 'node:6.0'
    }
    stages {
        stage("Run containers"){
            steps{
                sh "docker-compose up -d"
            }
        }
    }
}
