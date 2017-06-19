node("docker") {
    docker.withRegistry('https://hub.docker.com/', 'rihardslodzins/stulbieodi123') {
    
        git url: "https://github.com/rihardslodzins/SIL-project", credentialsId: 'rihardslodzins/Password2447'
    
        sh "git rev-parse HEAD > .git/commit-id"
        def commit_id = readFile('.git/commit-id').trim()
        println commit_id
    
        stage "build"
        def app = docker.build "test10"
    
        stage "publish"
        app.push 'master'
        app.push "${commit_id}"

    }
}


sdfsd
asds

sdfjjjsd nsdfhhjsd sadljdfgo sdkosdgo sdf