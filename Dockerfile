FROM centos:7

RUN yum update -y ; yum clean all

RUN yum install -y httpd php ; yum clean all;

RUN mkdir -p /opt/app
COPY . /opt/app
WORKDIR /opt/app

CMD ["php", "hello_world.php"]
