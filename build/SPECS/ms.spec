%define _targetdir /tmp/build
%define _sourcedir /tmp
%define _tmppath

Summary: Template Summary
Name: Template Package Name
Version:
Release:
Group:
Source:
License:
URL:

Provides: %{name}-%{version}-%{release}

BuildRoot: %{_tmppath}/%{name}-%{version}-%{release}-root-%(%{__id_u} -n)
BuildArch: noarch

BuildRequires: ant
Requires: php-fpm, php-cli, php-mbstring

%description
Template Description

%prep
# Possible location to compile the sass
php composer.phar update

%install
[ "$RPM_BUILD_ROOT" != "/" ] && rm -rf $RPM_BUILD_ROOT

install -m 755 -d $RPM_BUILD_ROOT%{_targetdir}src
install -m 755 -d $RPM_BUILD_ROOT%{_targetdir}public
install -m 755 -d $RPM_BUILD_ROOT%{_targetdir}vendor

cp -R '%{_sourcedir}src'/* $RPM_BUILD_ROOT%{_targetdir}src/
cp -R '%{_sourcedir}public'/* $RPM_BUILD_ROOT%{_targetdir}public/
cp -R '%{_sourcedir}vendor'/* $RPM_BUILD_ROOT%{_targetdir}vendor/
cp '%{_sourcedir}bootstrap.php' $RPM_BUILD_ROOT%{_targetdir}bootstrap.php

%clean

%files
%defattr(-, root, root)

%{_targetdir}src/*
%{_targetdir}/bootstrap.php

%post

%changelog
