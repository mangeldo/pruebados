import groovy.json.JsonSlurperClassic

pipeline {
agent { label 'master' }
environment {
 appName = "variable"
}
stage("paso 1"){

    steps {
       script {
        sh "echo 'hola mundo'"
      }
     }
    }
  }
 
post {
    always {
       deleteDir()
        sh "echo 'fase always'"
       }
     success {
        sh "echo 'fase success' "
      }
     failture {
            sh "echo 'fase failure'"
      }
  }

