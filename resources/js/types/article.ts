export type ArticlePreview = {
  id: number;
  title: string;
  slug: string;
  image: string | null;
  views_count: number;
  is_featured: boolean;
  published_at: string | null;
  excerpt: string;
};

export type ArticleFull = {
  id: number;
  title: string;
  content: string;
  slug: string;
  image: string | null;
  views_count: number;
  is_featured: boolean;
  published_at: string | null;
};

export type PaginationLink = {
  url: string | null;
  label: string;
  page?: number | null;
  active: boolean;
}

export type Pagination<T> = {
  current_page: number;
  data: T[];
  first_page_url: string;
  from: number | null;
  last_page: number;
  last_page_url: string | null;
  links: PaginationLink[];
  next_page_url: string | null;
  path: string;
  per_page: number;
  prev_page_url: string | null;
  to: number | null;
  total: number;
};

export type ArticlePagination = Pagination<Article>;
