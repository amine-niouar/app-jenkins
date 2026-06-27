pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                echo 'Code pulled from GitHub!'
            }
        }

        stage('Build') {
            steps {
                echo 'Building the app...'
                sh 'echo build step runs here'
            }
        }

        stage('Test') {
            steps {
                echo 'Running tests...'
                sh 'echo tests run here'
            }
        }

        stage('Deploy') {
            steps {
                echo 'Deploying...'
                sh 'echo deploy step runs here'
            }
        }
    }

    post {
        success {
            echo 'Pipeline finished successfully!'
        }
        failure {
            echo 'Something went wrong!'
        }
    }
}