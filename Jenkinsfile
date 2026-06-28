pipeline {
    agent {
        docker { image 'php:8.2-cli' }
    }

    stages {
        stage('Checkout') {
            steps {
                echo 'Code pulled from GitHub!'
            }
        }

        stage('Build') {
            steps {
                echo 'Checking PHP version...'
                sh 'php --version'
            }
        }

        stage('Test') {
            steps {
                echo 'Running tests...'
                sh 'php test.php'
            }
        }

        stage('Deploy') {
            steps {
                echo 'Deploying...'
                sh 'php index.php'
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