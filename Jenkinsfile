pipeline {
    agent {
        label "docker"
    }
    stages {
        stage("Run containers"){
            steps{
                sh "runme.sh"
            }
        }
    }
}
