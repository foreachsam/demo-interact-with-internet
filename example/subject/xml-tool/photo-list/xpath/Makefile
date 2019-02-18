

default: all
.PHONY: default

help:
	@echo Usage:
	@echo

	@echo 	make
	@echo 	make help
	@echo

	@echo 	make all
	@echo

	@echo 	make source
	@echo 	make list
	@echo 	make download
	@echo

.PHONY: help


all: source list download
	@echo
	@echo done.
.PHONY: all


source:
	@./source.sh
.PHONY: source


list: source
	@./list.sh
.PHONY: list


download:
	@./download.sh
.PHONY: download


clean:
	rm -rf ./all
	rm -rf ./xml
.PHONY: clean
