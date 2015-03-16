FROM centos:7

RUN yum update -y ; yum clean all

RUN yum -y install epel-release; yum clean all

RUN yum install -y httpd php git ; yum clean all;

RUN mkdir -p /opt/app
COPY . /opt/app
WORKDIR /opt/app

CMD ["php", "helloworld", "-v"]
