pipeline {  
    agent{
        docker 'node'
    }
    stages {
        stage("Run containers"){
            steps{
                sh "runme.sh"
            }
        }
    }
}
