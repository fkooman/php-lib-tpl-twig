%global composer_vendor  fkooman
%global composer_project tpl-twig

%global github_owner     fkooman
%global github_name      php-lib-tpl-twig

Name:       php-%{composer_vendor}-%{composer_project}
Version:    1.0.0
Release:    1%{?dist}
Summary:    Twig for Simple Template Abstraction Library

Group:      System Environment/Libraries
License:    ASL 2.0
URL:        https://github.com/%{github_owner}/%{github_name}
Source0:    https://github.com/%{github_owner}/%{github_name}/archive/%{version}.tar.gz
BuildArch:  noarch

Provides:   php-composer(%{composer_vendor}/%{composer_project}) = %{version}

Requires:   php(language) >= 5.3.3
Requires:   php-spl
Requires:   php-standard

Requires:   php-composer(fkooman/tpl) >= 2.0.0
Requires:   php-composer(fkooman/tpl) < 3.0.0

Requires:   php-pear(pear.twig-project.org/Twig) >= 1.18
Requires:   php-pear(pear.twig-project.org/Twig) < 2.0

%description
Simple Template Abstraction Library.

%prep
%setup -qn %{github_name}-%{version}

%build

%install
mkdir -p ${RPM_BUILD_ROOT}%{_datadir}/php
cp -pr src/* ${RPM_BUILD_ROOT}%{_datadir}/php

%files
%defattr(-,root,root,-)
%dir %{_datadir}/php/%{composer_vendor}/Tpl/Twig
%{_datadir}/php/%{composer_vendor}/Tpl/Twig
%doc README.md CHANGES.md composer.json
%license COPYING

%changelog
* Mon Aug 10 2015 François Kooman <fkooman@tuxed.net> - 1.0.0-1
- initial package
