pipeline {  
    agent{
        docker 'node:6.0'
    }
    stages {
        stage("Run containers"){
            steps{
                sh "runme.sh"
            }
        }
    }
}
