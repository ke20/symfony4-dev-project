FROM nginx:1.15-alpine

# Configure timezone
RUN apk add --update && \
    apk add --no-cache tzdata && \
    rm -rf /var/cache/apk/*
ENV TZ Europe/Paris

# Copy default nginx conf
COPY "docker/nginx/default.conf" "/etc/nginx/conf.d/default.conf"

# Confgure project
COPY . "/opt/app"
WORKDIR "/opt/app"

# Run nginx
CMD ["nginx", "-g", "daemon off;"]
